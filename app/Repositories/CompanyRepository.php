<?php

namespace App\Repositories;

use App\Company;
use App\Repositories\Interfaces\CompanyRepositoryInterface;

class CompanyRepository implements CompanyRepositoryInterface
{
    public function all()
    {
        return Company::paginate(10);
    }

    public function create(array $data)
    {
        return Company::create($data);
    }

    public function update(Company $company, array $data)
    {
        return $company->update($data);
    }

    public function delete(Company $company)
    {
        return $company->delete();
    }
}
