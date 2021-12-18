<?php
namespace App\Helpers;
use Exception;
use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;

class Helper {
    public static function uploadFile( UploadedFile $uploaded_file, string $folder, string $thumbnail = 'thumbnail', string $disk = 'public', bool $resize = false, int $resize_value = 150 ) {
        $temp_upload_dir = app()->basePath( 'public/uploads' );
        $file_name       = pathinfo( $uploaded_file->getClientOriginalName(), PATHINFO_FILENAME );
        $file_name .= '_' . time() . '.' . $uploaded_file->getClientOriginalExtension();

        try {
            if ( in_array( $uploaded_file->getClientOriginalExtension(), config( 'image_settings.allowed_image_types' ), true ) ) {
                Image::make( $uploaded_file )->orientate()->save( $temp_upload_dir . $file_name )->destroy();
                if ( $resize ) {
                    Image::make( $uploaded_file )->orientate()->resize( $resize_value, null, function ( $constraint ) {
                        $constraint->aspectRatio();
                    } )->save( $temp_upload_dir . $file_name )->destroy();
                    $resized_path = app( 'filesystem' )->disk( $disk )->putFileAs( $folder . $thumbnail, new File( $temp_upload_dir . $file_name ), $file_name, 'public' );
                }
            } else {
                $resize = false;
                $uploaded_file->move( $temp_upload_dir, $file_name );
            }

            $path = app( 'filesystem' )->disk( $disk )->putFileAs( $folder, new File( $temp_upload_dir . $file_name ), $file_name, 'public' );

        } catch ( Exception $e ) {

            return [];
        }

        if ( !$path ) {

            return [];
        }

        unlink( $temp_upload_dir . $file_name );
        return [
            'file_name'    => $file_name,
            'full_path'    => $path,
            'resized_path' => $resize ? $resized_path : null,
            'upload_dir'   => '/' . pathinfo( $path, PATHINFO_DIRNAME ),
        ];

    }
}