
    $(document).ready(function () {
        $('#notificationDropdown').on('click', function () {
            // Ambil notifikasi via Ajax
            $.ajax({
                url: "{{ route('notifications.get') }}",
                type: 'GET',
                success: function (data) {
                    // Kosongkan dropdown notifikasi
                    $('.preview-list').empty();
                    
                    // Jika ada notifikasi
                    if (data.contacts.length > 0) {
                        $.each(data.contacts, function(index, contact) {
                            $('.preview-list').append(
                                '<a class="dropdown-item preview-item py-3 notification-link" href="/admin/contact/respond/' + contact.id + '">' +
                                    '<div class="preview-thumbnail">' +
                                        '<img src="{{ asset("admin/img/user.png") }}" alt="image" class="img-sm profile-pic">' +
                                    '</div>' +
                                    '<div class="preview-item-content">' +
                                        '<h6 class="preview-subject fw-normal text-dark mb-1">' + contact.name + '</h6>' +
                                        '<p class="fw-light small-text mb-0">New contact message: "' + contact.title + '"</p>' +
                                    '</div>' +
                                '</a>'
                            );
                        });
                        $('#notificationCount').text(data.contacts.length);
                        $('#newNotificationCount').text(data.contacts.length);
                    } else {
                        $('.preview-list').append('<a class="dropdown-item py-3 border-bottom"><p class="mb-0 fw-medium float-start">No new notifications</p></a>');
                        $('#notificationCount').text(0);
                        $('#newNotificationCount').text(0);
                    }
                }
            });
        });

        // Saat mengklik notifikasi, hilangkan dari tampilan dan update jumlah
        $(document).on('click', '.notification-link', function () {
            var notificationId = $(this).data('id');
            // Kirim permintaan Ajax untuk menandai sebagai dibaca
            $.ajax({
                url: '/admin/contact/respond/' + notificationId,
                type: 'GET',
                success: function () {
                    // Setelah berhasil, update jumlah notifikasi di UI
                    var currentCount = parseInt($('#notificationCount').text());
                    $('#notificationCount').text(currentCount - 1);
                    $('#newNotificationCount').text(currentCount - 1);
                }
            });
        });
    });

