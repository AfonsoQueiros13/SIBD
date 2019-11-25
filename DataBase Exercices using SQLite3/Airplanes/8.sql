select country, COUNT(*) as number
from airport
group by country
order by number;