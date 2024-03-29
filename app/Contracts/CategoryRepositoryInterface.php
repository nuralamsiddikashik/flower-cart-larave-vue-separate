<?php
namespace App\Contracts;
interface CategoryRepositoryInterface {
    /**
     * @param bool $paginate
     * @return mixed
     */
    public function get();

    /**
     * @param $id
     * @return mixed
     */
    public function find( $id );

    /**
     * @param array $data
     * @return mixed
     */
    public function store( array $data );

    /**
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function update( $id, $data );

    /**
     * @param $id
     */
    public function destroy( $id );

}