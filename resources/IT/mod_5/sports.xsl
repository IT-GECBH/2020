<?xml version = "1.0"?>
<!-- Fig. 15.19: sports.xsl -->
<!-- A simple XSLT transformation -->
 <!-- reference XSL style sheet URI -->
<xsl:stylesheet version = "1.0" xmlns:xsl = "http://www.w3.org/1999/XSL/Transform">

<xsl:output method = "html" doctype-system = "about:legacy-compat" />
<xsl:template match = "/"> <!-- match root element -->

<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<meta charset = "utf-8"/>
<title>Sports</title>
</head>

<body>
<table border = "1">
<caption>Information about various sports</caption>
<thead>
<tr>
<th>ID</th>
<th>Sport</th>
<th>Information</th>
</tr>
</thead>

<!-- insert each name and paragraph element value -->
<!-- into a table row. -->
<xsl:for-each select = "/sports/game">
<tr>
<td><xsl:value-of select = "@id"/></td>
<td><xsl:value-of select = "name"/></td>
<td><xsl:value-of select = "paragraph"/></td>
</tr>
</xsl:for-each>
</table>
</body>
</html>

</xsl:template>
</xsl:stylesheet>