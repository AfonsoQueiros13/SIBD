
--alternative 1

--select
--  model.version,
--  model.make,
--  count(plane.planecod) as number
--  from
--    model left join plane
--    on model.modelcod = plane.modelcod
--group by model.modelcod
--order by number desc;

--alternative 2

select model.version, model.make, plane_models.number
from
model
join
(
select model.modelcod, count(plane.planecod) as number
  from
    model left join plane
    on model.modelcod = plane.modelcod
group by model.modelcod
)as plane_models
on model.modelcod = plane_models.modelcod
order by number desc
