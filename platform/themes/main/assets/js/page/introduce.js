export default {
    initCounter: function() {
        var counters = $(".__col__up.count");
        var countersQuantity = counters.length;
        var counter = [];

        for (i = 0; i < countersQuantity; i++) {
            counter[i] = parseFloat(counters[i].innerHTML);
        }

        var count = function(start, value, id) {
            var localStart = start;
            setInterval(function() {
                if (localStart < value) {
                    localStart++;
                    counters[id].innerHTML = localStart;
                }
            }, 4);
        }

        for (j = 0; j < countersQuantity; j++) {
            count(0, counter[j], j);
        }

    }
}