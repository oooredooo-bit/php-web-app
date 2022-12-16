<?php include('./layout/header.php'); ?>

    <h1>jQuery AJAX Demo</h1>

    <div class="col-4">
        <form>
            <div class="form-group">
                <label for="products">Products</label>
                <select name="products" id="products" class="form-control">
                    <option value="">-- Please Select --</option>
                    <option value="foods">Dog Foods</option>
                    <option value="treats">Dog Treats</option>
                </select>
            </div><br>
            <div class="form-group">
                <label for="brand">Brand</label>
                <select name="brand" id="brand" class="form-control">
                    <option value="">-- Please Select --</option>
                </select>
            </div><br>
        </form>
        <div class="form-group">
            <input type="button" class="btn btn-primary" id="btnSubmit" value="SUBMIT" />
        </div>
    </div>

<?php include('./layout/footer.php'); ?>