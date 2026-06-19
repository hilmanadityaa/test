<?php
// Analogikan bagai sebuah kontrak kerja (hanya buat janji/daftar fungsi)

namespace App\Interfaces;

interface UserRepositoryInterface
{
    public function getAll(?string $search, ?int $limit, bool $execute);

    public function getAllPaginated(?string $search, ?int $rowPerPage);
}

?>
