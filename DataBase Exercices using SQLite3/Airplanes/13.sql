--how many actual planes are there for each plane model. sort the result so
--that least frequent models appear last (make, version, number).
--Note: you do not need to show models that do not have planes.


--select *
--from
--  model join plane
--  on model.modelcod = plane.modelcod


--alternative 1

--select model.version, model.make, count(*) as number
--  from
--    model join plane
--    on model.modelcod = plane.modelcod
--group by model.modelcod
--order by number desc;

--alternative 2

select model.version, model.make, plane_models.number
from
model
join
(
select model.modelcod, count(*) as number
  from
    model join plane
    on model.modelcod = plane.modelcod
group by model.modelcod
)as plane_models
on model.modelcod = plane_models.modelcod
order by number desc
