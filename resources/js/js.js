
        // Hàm để tạo và hiển thị bản đồ
        function initMap() {
            // Vị trí cụ thể bằng tọa độ (latitude và longitude)
            var myLatLng = {lat: 40.7128, lng: -74.0060};

            // Tạo một đối tượng bản đồ và đặt vị trí ban đầu
            var map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                zoom: 15
            });

            // Tạo một đối tượng đánh dấu (marker) trên bản đồ
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Vị trí của bạn'
            });
        }

        // Gọi hàm initMap() khi trang web được tải
        google.maps.event.addDomListener(window, 'load', initMap);
    