let counter = 0;
function timedCount() {
  counter++;
  //sending this on the file that uses this web worker file
  postMessage("Count Numbers : "+counter);
  setTimeout("timedCount()", 500);
}
timedCount();