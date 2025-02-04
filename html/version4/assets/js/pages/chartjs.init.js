function getChartColorsArray(r) {
    r = $(r).attr("data-colors");
    return (r = JSON.parse(r)).map(function(r) {
        r = r.replace(" ", "");
        if (-1 == r.indexOf("--")) return r;
        r = getComputedStyle(document.documentElement).getPropertyValue(r);
        return r || void 0
    })
}! function(l) {
    "use strict";

    function r() {}
    r.prototype.respChart = function(r, o, e, a) {
        Chart.defaults.global.defaultFontColor = "#858d98", Chart.defaults.scale.gridLines.color = "rgba(133, 141, 152, 0.1)";
        var t = r.get(0).getContext("2d"),
            n = l(r).parent();

        function i() {
            r.attr("width", l(n).width());
            switch (o) {
                case "Line":
                    new Chart(t, {
                        type: "line",
                        data: e,
                        options: a
                    });
                    break;
                case "Doughnut":
                    new Chart(t, {
                        type: "doughnut",
                        data: e,
                        options: a
                    });
                    break;
                case "Pie":
                    new Chart(t, {
                        type: "pie",
                        data: e,
                        options: a
                    });
                    break;
                case "Bar":
                    new Chart(t, {
                        type: "bar",
                        data: e,
                        options: a
                    });
                    break;
                case "Radar":
                    new Chart(t, {
                        type: "radar",
                        data: e,
                        options: a
                    });
                    break;
                case "PolarArea":
                    new Chart(t, {
                        data: e,
                        type: "polarArea",
                        options: a
                    })
            }
        }
        l(window).resize(i), i()
    }, r.prototype.init = function() {
        var r = getChartColorsArray("#lineChart"),
            r = {
                labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"],
                datasets: [{
                    label: "Sales Analytics",
                    fill: !0,
                    lineTension: .5,
                    backgroundColor: r[0],
                    borderColor: r[1],
                    borderCapStyle: "butt",
                    borderDash: [],
                    borderDashOffset: 0,
                    borderJoinStyle: "miter",
                    pointBorderColor: r[1],
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: r[1],
                    pointHoverBorderColor: "#fff",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [65, 59, 80, 81, 56, 55, 40, 55, 30, 80]
                }, {
                    label: "Monthly Earnings",
                    fill: !0,
                    lineTension: .5,
                    backgroundColor: r[2],
                    borderColor: r[3],
                    borderCapStyle: "butt",
                    borderDash: [],
                    borderDashOffset: 0,
                    borderJoinStyle: "miter",
                    pointBorderColor: r[3],
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: r[3],
                    pointHoverBorderColor: "#eef0f2",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [80, 23, 56, 65, 23, 35, 85, 25, 92, 36]
                }]
            };
        this.respChart(l("#lineChart"), "Line", r, {
            scales: {
                yAxes: [{
                    ticks: {
                        max: 100,
                        min: 20,
                        stepSize: 10
                    }
                }]
            }
        });
        r = getChartColorsArray("#doughnut"), r = {
            labels: ["Desktops", "Tablets"],
            datasets: [{
                data: [300, 210],
                backgroundColor: r,
                hoverBackgroundColor: r,
                hoverBorderColor: "#fff"
            }]
        };
        this.respChart(l("#doughnut"), "Doughnut", r);
        r = getChartColorsArray("#pie"), r = {
            labels: ["Desktops", "Tablets"],
            datasets: [{
                data: [300, 180],
                backgroundColor: r,
                hoverBackgroundColor: r,
                hoverBorderColor: "#fff"
            }]
        };
        this.respChart(l("#pie"), "Pie", r);
        r = getChartColorsArray("#bar"), r = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "Sales Analytics",
                backgroundColor: r[0],
                borderColor: r[0],
                borderWidth: 1,
                hoverBackgroundColor: r[1],
                hoverBorderColor: r[1],
                data: [65, 59, 81, 45, 56, 80, 50, 20]
            }]
        };
        this.respChart(l("#bar"), "Bar", r, {
            scales: {
                xAxes: [{
                    barPercentage: .4
                }]
            }
        });
        r = getChartColorsArray("#radar"), r = {
            labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
            datasets: [{
                label: "Desktops",
                backgroundColor: r[0],
                borderColor: r[1],
                pointBackgroundColor: r[1],
                pointBorderColor: "#fff",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: r[1],
                data: [65, 59, 90, 81, 56, 55, 40]
            }, {
                label: "Tablets",
                backgroundColor: r[2],
                borderColor: r[3],
                pointBackgroundColor: r[3],
                pointBorderColor: "#fff",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: r[3],
                data: [28, 48, 40, 19, 96, 27, 100]
            }]
        };
        this.respChart(l("#radar"), "Radar", r);
        r = {
            datasets: [{
                data: [11, 16, 7, 18],
                backgroundColor: getChartColorsArray("#polarArea"),
                label: "My dataset",
                hoverBorderColor: "#fff"
            }],
            labels: ["Series 1", "Series 2", "Series 3", "Series 4"]
        };
        this.respChart(l("#polarArea"), "PolarArea", r)
    }, l.ChartJs = new r, l.ChartJs.Constructor = r
}(window.jQuery),
function() {
    "use strict";
    window.jQuery.ChartJs.init()
}();