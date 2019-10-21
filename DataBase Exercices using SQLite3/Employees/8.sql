--How many employees 
--work in each project? (project_name, number)

select 
    project.name as nome,
    count(works.id_pro) as number
from
    employee
join
    works
on
    employee.id = works.id_emp
join 
    project
on 
    project.id = works.id_pro
group 
    by project.id;