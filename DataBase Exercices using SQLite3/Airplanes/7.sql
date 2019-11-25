select 
    first_leg.flightcod as flightcod1,
    second_leg.flightcod as flightcod2,
    first_leg.toairportcod as intermediate_airport_code

from 
    flight as first_leg 
    join 
    flight as second_leg
on --joints use on
    first_leg.toairportcod = second_leg.fromairportcod
where
    first_leg.fromairportcod = 1 --Porto
    and 
    second_leg.toairportcod = 12; --London