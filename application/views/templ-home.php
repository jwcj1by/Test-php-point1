<div id="wrap">
    <div class="container">
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">头像</th>
                <th scope="col">姓名</th>
                <th scope="col">操作</th>
            </tr>
            </thead>
            <tbody>
            <{foreach $sql_val as $arr}>
            <tr>
                <th scope="row"><{$arr.id}></th>
                <td>
                    <img src="<{$arr.img}>" class="head-img border border-primary d-block rounded-circle" alt="...">
                </td>
                <td><{$arr.name}></td>
                <td>
                    <button type="button" class="btn btn-secondary" onclick="memberEdit(<{$arr.id}>)">编辑</button>
                    <button type="button" class="btn btn-danger" onclick="memberDel(<{$arr.id}>)">删除</button>
                </td>
            </tr>
            <{/foreach}>
            </tbody>
        </table>
    </div>

    <div class="bg-footer">
        <img src="../../public/login-background-footer.png" alt="">
    </div>
</div>

