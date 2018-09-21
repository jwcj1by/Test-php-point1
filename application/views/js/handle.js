let base_url = 'http://www.phpadmin.com'

function memberEdit(id) {
    $.ajax({
        url: `${base_url}/api/edit`
    })
}

function memberDel(id) {
    $.ajax({
        url: `${base_url}/api/del.php`
    })
}