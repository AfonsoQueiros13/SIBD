SELECT 
    project.name as projeto,
    department.name as departamento
from 
    project
join 
    department 
on 
    department.id=project.id_dep;