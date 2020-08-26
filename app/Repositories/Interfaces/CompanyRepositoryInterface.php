<?php

namespace App\Repositories\Interfaces;

use App\Company;

interface CompanyRepositoryInterface
{
    public function all();
    public function create(array $data);
    public function update(Company $company, array $data);
    public function delete(Company $company);
}
