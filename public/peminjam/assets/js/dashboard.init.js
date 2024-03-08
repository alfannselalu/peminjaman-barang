function getChartColorsArray(e) {
    if (null !== document.getElementById(e)) {
        var t = document.getElementById(e).getAttribute("data-colors");
        if (t)
            return (t = JSON.parse(t)).map(function (e) {
                var t = e.replace(" ", "");
                if (-1 === t.indexOf(",")) {
                    var r = getComputedStyle(
                        document.documentElement
                    ).getPropertyValue(t);
                    return r || t;
                }
                var a = e.split(",");
                return 2 != a.length
                    ? t
                    : "rgba(" +
                          getComputedStyle(
                              document.documentElement
                          ).getPropertyValue(a[0]) +
                          "," +
                          a[1] +
                          ")";
            });
    }
}
setTimeout(function () {
    $("#subscribeModal").modal("show");
}, 2e3);
var linechartBasicColors = getChartColorsArray("stacked-column-chart");
linechartBasicColors &&
    ((options = {
        chart: {
            height: 360,
            type: "bar",
            stacked: !0,
            toolbar: { show: !1 },
            zoom: { enabled: !0 },
        },
        plotOptions: {
            bar: { horizontal: !1, columnWidth: "15%", endingShape: "rounded" },
        },
        dataLabels: { enabled: !1 },
        series: [
            {
                name: "Series A",
                data: [44, 55, 41, 67, 22, 43, 36, 52, 24, 18, 36, 48],
            },
            {
                name: "Series B",
                data: [13, 23, 20, 8, 13, 27, 18, 22, 10, 16, 24, 22],
            },
            {
                name: "Series C",
                data: [11, 17, 15, 15, 21, 14, 11, 18, 17, 12, 20, 18],
            },
        ],
        xaxis: {
            categories: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
        },
        colors: linechartBasicColors,
        legend: { position: "bottom" },
        fill: { opacity: 1 },
    }),
    (chart = new ApexCharts(
        document.querySelector("#stacked-column-chart"),
        options
    )).render());
var options,
    chart,
    radialbarColors = getChartColorsArray("radialBar-chart");
radialbarColors &&
    ((options = {
        chart: { height: 200, type: "radialBar", offsetY: -10 },
        plotOptions: {
            radialBar: {
                startAngle: -135,
                endAngle: 135,
                dataLabels: {
                    name: { fontSize: "13px", color: void 0, offsetY: 60 },
                    value: {
                        offsetY: 22,
                        fontSize: "16px",
                        color: void 0,
                        formatter: function (e) {
                            return e + "%";
                        },
                    },
                },
            },
        },
        colors: radialbarColors,
        fill: {
            type: "gradient",
            gradient: {
                shade: "dark",
                shadeIntensity: 0.15,
                inverseColors: !1,
                opacityFrom: 1,
                opacityTo: 1,
                stops: [0, 50, 65, 91],
            },
        },
        stroke: { dashArray: 4 },
        series: [67],
        labels: ["Series A"],
    }),
    (chart = new ApexCharts(
        document.querySelector("#radialBar-chart"),
        options
    )).render());


    function openPopup(userId) {
        // Open the popup for the specified user_details ID
        var popupId = 'popup_' + userDId;
        var popupElement = document.getElementById(popupId);
    
        if (popupElement) {
            popupElement.style.display = 'block';
        } else {
            console.error('Popup element not found for userDId:', userId);
        }
    }
    

    function closePopup(userId) {
        var popupId = 'popup_' + userId;
        var popupElement = document.getElementById(popupId);
    
        if (popupElement) {
            popupElement.style.display = 'none';
        } else {
            console.error('Popup element not found for userId:', userId);
        }
    
        return false; // Ensure the default action (if any) is prevented
    }
    
    
    
    window.onclick = function(event) {
        var popup = document.getElementById('popup');
        if (event.target == popup) {
            popup.style.display = 'none';
        }
    }
  
    document.addEventListener("DOMContentLoaded", function () {
        var textContainer = document.getElementById("textJudul{{$loop->index}}");
        var maxChars = 50; // Sesuaikan dengan jumlah karakter maksimal yang diinginkan

        if (textContainer.textContent.length > maxChars) {
            textContainer.textContent = textContainer.textContent.substring(0, maxChars) + '...';
        }
    });

    document.addEventListener('DOMContentLoaded', function () {
        // Ambil semua kotak pesan
        var messageBoxes = document.querySelectorAll('.kotak-pesan');

        // Sembunyikan semua kotak pesan kecuali yang pertama
        for (var i = 1; i < messageBoxes.length; i++) {
            messageBoxes[i].style.display = 'none';
        }

        // Fungsi untuk menampilkan popup dengan pesan-pesan yang ada
        function openPopup() {
            document.getElementById('popup').style.display = 'block';
        }

        // Fungsi untuk menutup popup
        function closePopup() {
            document.getElementById('popup').style.display = 'none';
        }

        // Fungsi untuk menampilkan pesan tertentu pada popup
        function showPopupMessage(index) {
            // Sembunyikan semua kotak pesan
            for (var i = 0; i < messageBoxes.length; i++) {
                messageBoxes[i].style.display = 'none';
            }

            // Tampilkan kotak pesan dengan indeks yang sesuai
            messageBoxes[index].style.display = 'block';

            // Tampilkan popup
            openPopup();
        }

        // Tambahkan event click pada link untuk menampilkan popup
        var pesanLink = document.querySelector('.pesan-link');
        pesanLink.addEventListener('click', function () {
            // Tampilkan pesan pertama pada popup
            showPopupMessage(0);

            // Hentikan navigasi ke halaman /message
            return false;
        });

        // Tambahkan event click pada tombol untuk menampilkan pesan kedua pada popup
        var tampilkanPesan2Button = document.getElementById('tampilkan-pesan-2');
        tampilkanPesan2Button.addEventListener('click', function () {
            // Tampilkan pesan kedua pada popup
            showPopupMessage(1);
        });

        // Tambahkan event click pada tombol untuk menampilkan pesan ketiga pada popup
        var tampilkanPesan3Button = document.getElementById('tampilkan-pesan-3');
        tampilkanPesan3Button.addEventListener('click', function () {
            // Tampilkan pesan ketiga pada popup
            showPopupMessage(2);
        });
    });


   
