SELECT 
    project.name
from 
    project
join 
    department 
on
    project.id_dep=department.id
where 
    department.name = 'Transports';