<div id="content">
    <h1>Giới Thiệu</h1>
    <div class="table">
    <form method="post" onsubmit="return addStudent()">
        <div class="form-group">
            <label>Fullname:</label>
            <input required="true" type="text" name="fname" id="fullname">
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input required="true" type="email" name="email" id="emailAddress">
        </div>
        <div class="form-group">
            <label>Address:</label>
            <input required="true" type="text" name="addr" id="address">
        </div>
        <button>Add Student</button>
        <button type="reset">Reset</button>
    </form>

    <table border="1" cellspacing="1" cellpadding="1" style="margin-top: 20px;">
        <thead>
        <tr>
            <th>No</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Address</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody id="result">
        </tbody>
    </table>
    </div>
</div>
</div>