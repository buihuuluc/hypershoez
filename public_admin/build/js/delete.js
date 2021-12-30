function deleteProduct(id) {
    // var option = confirm('Bạn có chắc chắn muốn xoá danh mục này không?')
    // if(!option) {
    //     return;
    // }

    console.log(id)
    //ajax - lenh post
    $.post('ajax.php', {
        'id': id,
        'action': 'delete'
    }, function(data) {
        location.reload()
    })
}