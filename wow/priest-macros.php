<!-- priest_macros.php -->


<?php

E:\World of Warcraft\WTF\Account\87607064#2\Destromath\Kalendra\macros-cache.php

?>

<pre>
VER 3 0100000000000011 "Big Group Heal" "INV_MISC_QUESTIONMARK"
#showtooltip
/cast Inner Focus
/cast Archangel
/cast Prayer of Healing
END
VER 3 0100000000000006 "Big Heal" "INV_MISC_QUESTIONMARK"
#showtooltip
/cast [@mouseover, help][help] Greater Heal; [@mouseover, harm][harm] Dominate Mind; Greater Heal
END
VER 3 010000000000000E "Buff" "INV_MISC_QUESTIONMARK"
#showtooltip
/cast [help] Power Word: Fortitude
/castsequence Fear Ward, Power Word: Fortitude, Inner Fire
END
VER 3 0100000000000003 "Cleanse" "INV_MISC_QUESTIONMARK"
/stopcasting
/cast [@mouseover, help] Purify; [@mouseover, harm][harm] Dispel Magic; Purify
END
VER 3 0100000000000008 "Flash Heal" "INV_MISC_QUESTIONMARK"
#showtooltip
/cast [mod:alt] Inner Focus
/cast [mod:alt, help] Binding Heal;
/cast [mod:alt, @player][@mouseover, help][@notarget] Flash Heal;
/cast [@mouseover, harm][harm] Power Word: Solace;
/CAST Vampiric Touch
/cast [] Flash Heal;
END
VER 3 010000000000000C "Group Shield" "INV_MISC_QUESTIONMARK"
#showtooltip
/cast Spirit Shell
/cast Prayer of Healing
END
VER 3 0100000000000010 "Holy Nova" "INV_MISC_QUESTIONMARK"
/cast [mod:alt, @player] Inner Focus
/cast [mod:alt, @player] Flash Heal
/cast [] Smite
END
VER 3 0100000000000012 "Mana" "INV_MISC_QUESTIONMARK"
#showtooltip
/use Soothing Talisman of the Shado-Pan Assault
/use [nocombat] Conjured Mana Buns
/use [nocombat] Carbonated Water
/cast [combat] Hymn of Hope
END
VER 3 0100000000000009 "mount" "INV_MISC_QUESTIONMARK"
/cast [flyable] Sandstone Drake
/cast Blue Shado-Pan Riding Tiger
/cast [@mouseover, help][] !Levitate
END
VER 3 0100000000000013 "Pain Sup" "INV_MISC_QUESTIONMARK"
#showtooltip Pain Suppression
/cast Archangel
/cast [@mouseover, help][help][] Pain Suppression
/cast Power Word: Barrier
END
VER 3 0100000000000007 "Penance" "INV_MISC_QUESTIONMARK"
#showtooltip
/stopcasting
/cast [@mouseover, help] Spirit Shell
/cast [@mouseover, harm][@mouseover, help][help][] Penance;
END
VER 3 0100000000000014 "Prayer of Mendin" "INV_MISC_QUESTIONMARK"
/cast [mod:alt, @player][@mouseover, help][help][@targettarget][] Prayer of Mending
END
VER 3 0100000000000004 "Renew" "INV_MISC_QUESTIONMARK"
/cast [mod:alt, @player][@mouseover, help][help] Renew;
/cast [harm][@notarget] Holy Fire
/CAST Devouring Plague
/cast [] Holy Fire
END
VER 3 010000000000000D "Root" "INV_MISC_QUESTIONMARK"
/self 
END
VER 3 010000000000000A "Run" "INV_MISC_QUESTIONMARK"
#showtooltip
/cancelaura Levitate
/cast Angelic Feather
END
VER 3 0100000000000005 "Self Cleanse" "INV_MISC_QUESTIONMARK"
/cast [@player] Purify
END
VER 3 0100000000000001 "Self Penance" "INV_MISC_QUESTIONMARK"
#showtooltip
/cast [@player] Penance
END
VER 3 0100000000000002 "Shdw DeathShield" "INV_MISC_QUESTIONMARK"
#show
/castsequence [mod:alt, @player] reset=10 Power Word: Shield, Angelic Feather
/cast [@mouseover, help] Power Word: Shield; [@mouseover, harm][harm] Shadow Word: Death; [help][] Power Word: Shield
END

</pre>