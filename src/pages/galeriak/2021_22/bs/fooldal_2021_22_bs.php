{{> hover}}

<div class="cell medium-9 medium-cell-block-y">
    <style>
    .headers {
        top: 0;
        position: -webkit-sticky;
        position: sticky;
        z-index: 1;
    }

    .tracks,
    .scroller {
        display: flex;
        overflow-y: hidden;
        -webkit-overflow-scrolling: touch;
    }

    .scroller {
        overflow-x: hidden;
    }
    </style>

    <div class="headers">
        <div class="scroller">
            <ul class="menu simple">
                <li style="padding: 0.7rem 1rem;"><a href="{{root}}galeriak/2021_22/ps/fooldal_2021_22_ps.php">Székhely</a></li>
                <li class="is-active"><a href="{{root}}galeriak/2021_22/bs/fooldal_2021_22_bs.php" style="padding: 0.7rem 1rem;">Tagiskola</a></li>
            </ul>
        </div>
    </div>


    <h3 class="text-center">Szegedi Petőfi Sándor Általános Iskola<br />
        Bálint Sándor Tagiskolája<br>
        <small>Fotógalériák 2021–2022</small>
    </h3>
    <hr>

    <div class="grid-x grid-margin-x">
        <?php
    //set main directory
    $mainDir = '../../../assets/img/galeriak/2021_22/bs/';
    {{> galeria_fooldal_fix_part_bs_2021_22}}
    {{> menu_galeriak_horizontal_centered}}

</div>