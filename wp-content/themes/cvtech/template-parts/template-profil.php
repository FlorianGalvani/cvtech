<?php
/*
Template Name: Profil
*/
$user = wp_get_current_user();
if ($user->ID == 0) {
    header('location:login');
}
get_header(); ?>
<img src="<?php echo get_template_directory_uri() . '/asset/img/recruteur-img.png'; ?>" alt="" class="recruit">



<section id="recruteur">
<h2>Mon espace personnel</h2>
    <!--for demo wrap-->
    <h1>cv mis en ligne</h1>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Objectif</th>
                    <th>Expérience</th>
                    <th>Formation</th>
                    <th>Compétence</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
                <tr>
                    <td>michel</td>
                    <td>devenir un vrai michel !dd,dkdkjdkdkkdkdkdkdk kdkdkdkdkddk kdkdkdkdkddkdk kdkdkdkddkdkdkdkdkdkdkkdkdk kd kddk kk dk dk k </td>
                    <td>michel1, michel2, michel3</td>
                    <td>michmich, michmich2</td>
                    <td>mich mich mich mich</td>
                    <td>
                        <div class="see-more">
                            <a href="" id="eye"><i class="fas fa-eye"></i></a>
                            <a href="" id="see">voir</i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>AAC</td>
                    <td>AUSTRALIAN COMPANY </td>
                    <td>$1.38</td>
                    <td>+2.01</td>
                    <td>-0.36%</td>
                    <td>
                        <a href=""><i class="fas fa-eye"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>AAC</td>
                    <td>AUSTRALIAN COMPANY </td>
                    <td>$1.38</td>
                    <td>+2.01</td>
                    <td>-0.36%</td>
                    <td>
                        <a href="">voir plus</a>
                    </td>
                </tr>
                <tr>
                    <td>AAC</td>
                    <td>AUSTRALIAN COMPANY </td>
                    <td>$1.38</td>
                    <td>+2.01</td>
                    <td>-0.36%</td>
                    <td>
                        <a href="">voir</a>
                    </td>
                </tr>
                <tr>
                    <td>AAC</td>
                    <td>AUSTRALIAN COMPANY </td>
                    <td>$1.38</td>
                    <td>+2.01</td>
                    <td>-0.36%</td>
                    <td>
                        <a href="">voir</a>
                    </td>
                </tr>
                <tr>
                    <td>AAC</td>
                    <td>AUSTRALIAN COMPANY </td>
                    <td>$1.38</td>
                    <td>+2.01</td>
                    <td>-0.36%</td>
                    <td>
                        <a href="">voir</a>
                    </td>
                </tr>
                <tr>
                    <td>AAC</td>
                    <td>AUSTRALIAN COMPANY </td>
                    <td>$1.38</td>
                    <td>+2.01</td>
                    <td>-0.36%</td>
                    <td>
                        <a href="">voir</a>
                    </td>
                </tr>
                <tr>
                    <td>AAC</td>
                    <td>AUSTRALIAN COMPANY </td>
                    <td>$1.38</td>
                    <td>+2.01</td>
                    <td>-0.36%</td>
                    <td>
                        <a href="">voir</a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</section>


<?php
get_footer(); ?>