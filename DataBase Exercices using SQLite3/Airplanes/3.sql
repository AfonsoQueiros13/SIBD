select 
    plane.name as plane_name, 
    engines as number 
from 
    plane join 
    model 
    on plane.modelcod = model.modelcod
order by number DESC;