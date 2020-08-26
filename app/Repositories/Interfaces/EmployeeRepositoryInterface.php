<?php

namespace App\Repositories\Interfaces;

use App\Employee;

interface EmployeeRepositoryInterface
{
    public function all();
    public function allWithCompany();
    public function create(array $data);
    public function update(Employee $employee, array $data);
    public function delete(Employee $employee);
}
