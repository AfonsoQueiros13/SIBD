--WRONG (does not consider duplicates!!)
--select * 
--from
--(
--select country, COUNT(*) as number
--from airport
--group by country
--order by number DESC
--) as airports_by_country
--limit 1;

select country, COUNT(*) as number
from airport
group by country
having number = (
    select min(number) as min_no_airports
    from 
    (
        select country, COUNT(*) as number
        from airport
        group by country
    ) as airports_by_country
)