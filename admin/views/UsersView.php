<?php 
    //load file Layout.php
    $this->fileLayout = "Layout.php";
?>
<style type="text/css">
    table,tr,td,th {
        border: 1px solid #f5f5f5;
        border-collapse:collapse;
    }
    tr,td,th{
        padding: 10px;
    }
    table{
        width: 100%;
    }
    .list-users{
        font-size: 14px;
        width: 100%;
        color: #8a8e91
    }
    tr:hover{
        background-color: #f5f5f5;
    }
    .page li{
        display:inline;
        border:1px solid #f5f5f5;
        border-radius: 2px;
        padding: 5px;
        margin-left: -5px;
    }
    .page{
        /*border:1px solid #f5f5f5;
        border-radius: 2px;*/
        /*height: 30px;*/
        margin-top:10px;
        padding:0px; 

    }
    .list{
        margin: 15px;
        border: 1px solid #f5f5f5;
        border-radius: 3px;
    }
</style>
<div class="list-users">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=users&action=create" class="btn btn-primary">Thêm user</a>
    </div>
    <div class="list">
        <div class="" style="margin: 10px;color: #626e89;">Danh sách User</div>
        <div class="">
            <table>
                <tr>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php 
                    foreach ($data as $rows): ?>
                    <tr>
                        <td><?php echo $rows->name; ?></td>
                        <td><?php echo $rows->email; ?></td>
                        <td style="text-align:center;">
                            <a href="index.php?controller=users&action=update&id=<?php echo $rows->id; ?>">Edit</a>&nbsp;
                            <a href="index.php?controller=users&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <ul class="page">
        <li class=""><a href="#" class="">Trang</a></li>
        <?php for($i =1; $i <= $numPage; $i++): ?>
            <li class=""><a href="index.php?controller=users&p=<?php echo $i ?>" class=""><?php echo $i; ?></a></li>
        <?php endfor; ?>
     </ul>
</div>