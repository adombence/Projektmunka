<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/egitest">
        <html>
            <head>
                <meta charset="UTF-8"/>
                <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                <title>Naprendszer égitestei</title>
                <link rel="stylesheet" href="css/style.css"/>
            </head>
            <body>
                <h1>
                    <xsl:value-of select="nev"/>
                </h1>
                <h2>Pálya adatok</h2>
                <table class="palyaadatok">
                    <tr>
                        <th>Név</th>
                        <td>
                            <xsl:value-of select="nev"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Aphélium távolsága</th>
                        <td>
                            <xsl:value-of select="apheliumtavolsaga"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Perihélium távolsága</th>
                        <td>
                            <xsl:value-of select="periheliumtavolsaga"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Fél nagytengely</th>
                        <td>
                            <xsl:value-of select="felnagytengely"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Pálya kerülete</th>
                        <td>
                            <xsl:value-of select="palyakerulete"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Pálya excentritása</th>
                        <td>
                            <xsl:value-of select="palyaexcentricitasa"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Sziderikus keringési idő</th>
                        <td>
                            <xsl:value-of select="sziderikuskeringesiido"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Szinodikusperiodus</th>
                        <td>
                            <xsl:value-of select="szinodikusperiodus"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Min. pályamenti sebesség</th>
                        <td>
                            <xsl:value-of select="minpalyamentisebesség"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Átl. pályamenti sebesség</th>
                        <td>
                            <xsl:value-of select="atlpalyamentisebesseg"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Max. pályamenti sebesség</th>
                        <td>
                            <xsl:value-of select="maxpalyamentisebesseg"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Inkláció</th>
                        <td>
                            <xsl:value-of select="inklacio"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Felszálló csomó hossza</th>
                        <td>
                            <xsl:value-of select="felszallocsomohossza"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Perihélium szöge</th>
                        <td>
                            <xsl:value-of select="periheliumszoge"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Központi égitest</th>
                        <td>
                            <xsl:value-of select="kozpontiegitest"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Holdak</th>
                        <td>
                            <xsl:value-of select="holdak"/>
                        </td>
                    </tr>
                </table>
                <h2>Fizikai adatok</h2>
                <table class="fizikai">
                    <tr>
                        <th>Felszín</th>
                        <td>
                            <xsl:value-of select="felszin"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Egyenlítő sugár</th>
                        <td>
                            <xsl:value-of select="egyenlitoisugar"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Lapultság</th>
                        <td>
                            <xsl:value-of select="lapultsag"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Felszín területe</th>
                        <td>
                            <xsl:value-of select="felszinterulete"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Térfogat</th>
                        <td>
                            <xsl:value-of select="terfogat"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Tömeg</th>
                        <td>
                            <xsl:value-of select="tomeg"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Átlagos sűrűség</th>
                        <td>
                            <xsl:value-of select="atlagossuruseg"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Felszíni gravitáció</th>
                        <td>
                            <xsl:value-of select="felszinigravitacio"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Szökési sebesség</th>
                        <td>
                            <xsl:value-of select="szokesisebesseg"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Sziderikus forgás idő</th>
                        <td>
                            <xsl:value-of select="sziderikusforgasido"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Forgási sebesség</th>
                        <td>
                            <xsl:value-of select="forgasisebesseg"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Tengelyferdeség</th>
                        <td>
                            <xsl:value-of select="tengelyferdeseg"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Az északi pólus rektaszcenziója</th>
                        <td>
                            <xsl:value-of select="eszakipolusrektaszcenzioja"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Deklináció</th>
                        <td>
                            <xsl:value-of select="deklinacio"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Albedó</th>
                        <td>
                            <xsl:value-of select="albedo"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Hőmérséklet</th>
                        <td>
                            <xsl:value-of select="homerseklet"/>
                        </td>
                    </tr>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
