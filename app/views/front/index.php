            <style>
                #rcorners1 {
                    border-radius: 25px;
                }
            </style>
            <section class="portfolio-showcase-block" style="margin-top:60px!important">
                <div class="inside">

                    <?php
                    $i = 0;
                    foreach ($bundle_rows as $row) {

                        if ($i % 3 == 0 or $i == 0) {
                            echo "<div class='caption-style-4 clear'>";
                        }

                        echo "
                            <div style='cursor:pointer;' 
                            class='post-41 metrolics_portfolio type-metrolics_portfolio status-publish hentry featured-list " . $row['backtext_color'] . " " . (($i + 1) % 3 == 0 ? "last" : "") . "'>
                                <a href='" . base_url() . $row['sub_url'] . "'>
                                    <div class='featured-content' id='rcorners1'>
                                        <img style='width:356px; height:220px;' src='" . $this->config->item('img_path') . "bundle-icon/" . $row['icon1'] . "' class='attachment-post-thumbnail wp-post-image' alt='" . $row['nama_paret'] . "'/>
                                        <div class='featured-desc'>
                                            <h4>" . $row['nama_paret'] . "</h4>
                                            <span class='feat-category'>Penerimaan Agustus : 

                                            </span>
                                            <span class='feat-icon'><i class='fa fa-globe fa-lg'></i></span>
                                        </div>
                                        <div class='caption'>
                                            <div class='blur'>&nbsp;</div>
                                            <div class='caption-text'>
                                                <h4>" . $row['nama_paret'] . "</h4>    
                                                <span class='feat-category'>Penerimaan Agustus : Rp. 52.000.000</span>
                                            </div>
                                        </div>  
                                    </div>
                                </a>
                            </div>";

                        if (($i + 1) % 3 == 0) {
                            echo "</div>";
                        }

                        $i++;
                    }
                    ?>
            </section>
            <section class="page-content">
                <div class="inside clear"></div>
            </section>

            <script>
                $(document).ready(function() {
                    get_realisasi()
                });

                function get_realisasi() {
                    var tahun = $('#tahun_pajak').val();
                    $.ajax({
                        type: "POST",
                        url: "http://localhost/sipada-sampang/front/get_realisasi",
                        data: {
                            tahun_pajak: tahun
                        },
                        dataType: "json",
                        success: function(response) {
                            var tbody = $('#hasil_realisasi');
                            tbody.empty(); // bersihkan isi sebelumnya

                            if (Array.isArray(response)) {
                                response.forEach(function(item) {
                                    var row = `
                                        <tr>
                                            <td>${item.nama_pajak}</td>
                                            <td>${item.target_wp}</td>
                                            <td>${item.tot_realisasi_wp}</td>
                                            <td align="right">${formatNumber(item.target_pajak)}</td>
                                            <td align="right">${formatNumber(item.tot_realisasi)}</td>
                                        </tr>
                                        `;
                                    tbody.append(row);
                                });
                            } else {
                                tbody.append('<tr><td colspan="5">Data tidak ditemukan</td></tr>');
                            }
                        }
                    });
                }

                function formatNumber(num) {
                    return Number(num).toLocaleString('id-ID');
                }
            </script>