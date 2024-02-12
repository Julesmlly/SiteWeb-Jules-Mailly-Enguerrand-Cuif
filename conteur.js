
function updateVisitorsCount() {

    var visitors = Math.floor(Math.random() * 96) + 5;
    document.getElementById("visitor-number").innerText = visitors;
}

setInterval(updateVisitorsCount, 2000);

updateVisitorsCount();
