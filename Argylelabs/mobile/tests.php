[window.screen.width]
return Math.max(
[window.innerWidth, 
document.body.scrollWidth, 
document.body.offsetWidth, 
document.body.clientWidth, 
document.documentElement.scrollWidth, 
document.documentElement.offsetWidth, 
document.documentElement.clientWidth]);

@media device-width
@media width

[window.screen.height]
return Math.max(
window.innerHeight, 
document.body.scrollHeight, 
document.body.offsetHeight, 
document.body.clientHeight, 
document.documentElement.scrollHeight, 
document.documentElement.offsetHeight, 
document.documentElement.clientHeight])

@media device-height
@media height

window.orientation
@media orientation

<!-- @media queries done 'programmatically' using window.matchMedia() -->

<!-- User Agent -->