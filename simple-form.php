            <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
                <label for="">
                    <input class="form-check-input" type="checkbox" name="" value="" id=""> Incompany
                </label>
                <label for="">
                    <input class="form-check-input" type="checkbox" name="" value="" id=""> Vaste locatie
                </label>
                <input type="hidden" name="action" value="myfilter">
            </form>
