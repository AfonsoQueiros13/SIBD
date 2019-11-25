SELECT employee.name,department.name
from employee
join department 
on department.id=employee.id_dep;