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


// Genesis

/castsequence Genesis
/cast Nourish


// Healing Touch

#showtooltip
/cast [mod:alt,@player][@mouseover, help, nodead] [help]Healing Touch; [@mouseover, harm][harm] [] Starfire;
/castsequence [@mouseover, harm][harm] [] Starsurge;


// HT/Wrath

#showtooltip
/use [mod:alt] Horde Battle Standard;
/use [mod:alt] Lifeblood;
/cast [mod:alt] Life Spirit;
/cast [mod:alt, @player][help] Nature's Swiftness;
/cast [mod:alt,@player][@mouseover, help][help]  Healing Touch;[harm] Wrath; [] Healing Touch


// Leap

#showtooltip
/cancelform [form:4,@mouseover, help][noform:4,@mouseover,help]
/cast [noform:3,@mouseover, harm] Bear Form;
/cast [@mouseover, help] Wild Charge; /cast [@mouseover, harm] Wild Charge; [noform:4, help] Wild Growth; Wild Charge


// Lifebloom

/cast 
[modifier:alt, target=player][target=mouseover, help][help] Lifebloom; 
[form:3,harm] Rake; 
[form:1, harm] Swipe; 
[@focus][] Lifebloom


// Mangle/Maul

#showtooltip
/cast [mod:alt, @player][@mouseover, help][help] Regrowth; 
/cast [form:1] Maul
/stopcasting [form:1]
/cast [form:1/3] Mangle


// Moonfire/Rejuv

#showtooltip
/cast [mod:alt,@player][@mouseover, help, nodead] [help]Rejuvenation; 
/cast [@mouseover, harm][noform:3,harm][harm]  Moonfire
/cast [form:3,harm] Shred; Rejuvenation


// Natures Swiftness/Bite

/cast [mod:alt, @player][@mouseover, help][help] Nature's Swiftness; 
/cast [stealth] Ravage
/cast Ferocious Bite




</pre>