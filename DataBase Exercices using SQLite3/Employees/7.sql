--List all employees working 
--on project XPTO and how many hours 
--each one of them works in that project. 
--Order the list from the employee that 
--works more hours to the one that works 
--less. (employee_name, hours).

select 
    employee.name as nome,
    works.hours as horas_de_trab
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
where
    project.name = 'XPTO'
order 
    by works.hours DESC;