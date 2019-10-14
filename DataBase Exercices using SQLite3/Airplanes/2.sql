select name 
from 
    plane join 
    model 
    on plane.modelcod = model.modelcod
where  model.version = "DC-10"; 