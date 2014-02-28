<h1> Druid Macros </h1>

<pre>



// BearMe - pretty much everything to just live

/cast Heart of the Wild(Talent)
/cast {@player] Ironbark
/cast Might of Ursoc
/use Life Spirit
/cast Stampeding Roar
/cast Survival Instincts
/use Horde Battle Standard


// BoomCharge

#showtooltip
/cancelform [form:4,@mouseover, help][noform:4,help]
/cast [noform:3,@mouseover, harm] Bear Form;
/cast [@mouseover, help] Wild Charge; /cast [@mouseover, harm] Wild Charge; wild Charge


// Boomkin (form from flying, into Moonkin or back into Moonkin - with the shift to remove impairments)

#showtooltip
/cancelform [flying]
/cast !Moonkin Form


// Detonate/Cleanse (remove impairment depending on spec, allows for activation of offensive ability if targeting a foreign player)

#showtooltip
/cast [target=mouseover, help][help] Nature's Cure;
/cast [target=mouseover, help][help] Remove Corruption;
/cast [harm] Wild Mushroom: Detonate


// FF/Mushroom (unfortunately uses the Battle Standard automatically - but I often do forget it sometimes! Targeting an opponent casts faerie fire, other just wild mushroom bloom)

#showtooltip
/cast [harm] Faerie Fire; [] Wild Mushroom: Bloom
/use Battle Standard of Coordination





</pre>