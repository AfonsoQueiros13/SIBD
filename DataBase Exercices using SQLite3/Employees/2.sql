SELECT 
    department.name as nome_departamento,
    employee.name as nome_diretor
from department
join employee 
on department.id_dir=employee.id_sup;