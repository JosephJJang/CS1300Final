<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hong's Gallery</title>
        <link href="./css/main.css" rel="stylesheet" type="text/css" />
        <script src="./scripts/lib/jquery-1.11.3.min.js"></script>
        <script src="./scripts/nav.js"></script>
    </head>

    <body>
        <!-- navbar -->
        <?php include 'php/navbar.php';?>

        <!-- content -->
        <div id="content">
            <div id="biograph"></div>

            <div id="bioContainer">

                <div class="bio-row">
                    <div class="bio-row-header">
                        <h2>About</h2>
                    </div>
                    <div class="bio-row-body">
                        <p>Hong is an administrative officer who works in a city in China. He used to be an art teacher and has developed his second career as an amateur artist since then. Now he is the vice president of Anhui Association of Promisinig Young Artists. He has been creating oil paintings for more than twenty years - his work mainly focuses on scenery and landscape paintings.
                        </p>
                        <p>He sees landscape paintings as a conversation between the painter and nature, a way to blend himself in. From replication of the views to reproduction with feelings, from passively observing the scenery, to taking the initiative to feel the light and colors within, he has always tried to merge the feelings and the goodness of humanity into the paintings to reach something that’s unified during his years of practice.
                        </p>
                    </div>
                </div>

                <div class="bio-row">
                    <div class="bio-row-header">
                        <h2>Awards</h2>
                    </div>
                    <div class="bio-row-body">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="table-column-timeline">1998</td>
                                    <td>Artwork<span class="artwork-title"> "A Warm Breeze"</span>,<span class="artwork-desciption"> selected in the Anhui Art Exhibition of Promising Artists</span></td>
                                </tr>
                                <tr>
                                    <td class="table-column-timeline">2001</td>
                                    <td>Work Collections<span class="artwork-title"> "Hometown Memories"</span>,<span class="artwork-desciption"> selected in “Guardian of Nature” Art Exhibition, the 3rd Anhui Biennale of Young &amp; Middle-aged Artists</span></td>
                                </tr>
                                <tr>
                                    <td class="table-column-timeline">2004</td>
                                    <td>Work Collections<span class="artwork-title"> "Places Where the Smoke Rise"</span>,<span class="artwork-desciption"> listed in the 2004 Anhui Art Festival and in “Extraordinary Space” Art Exhibition, the 4th Anhui Biennale of Young &amp; Middle-aged Artists</span></td>
                                </tr>
                                <tr>
                                    <td class="table-column-timeline">2007</td>
                                    <td>Artwork<span class="artwork-title"> "Feelings"</span>,<span class="artwork-desciption"> collected by China - ASEAN Oil Painting Art Exhibition in 2007</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

        <!-- footer -->
        <?php include 'php/footer.php';?>
    </body>
</html>
