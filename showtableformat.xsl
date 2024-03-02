<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<head>
<title>Student Information</title>
</head>
<body>
<xsl:apply-templates/>
</body>
</html>
</xsl:template>
<xsl:template match = "book">
<table width="400" border="1" align ="center" >
<tr bgcolor ="598744">
<th>Title</th>
<th>Author</th>
<th>Publisher</th>
<th>ISBN</th>
</tr>
<xsl:for-each select="books" >
<tr>
<td>
<xsl:value-of select="Title" />
</td>
<td>
<xsl:value-of select="Author" />
</td>
<td>
<xsl:value-of select="Publisher" />
</td>
<td>
<xsl:value-of select="ISBN" />
</td>
</tr>
</xsl:for-each>
</table>
</xsl:template>
</xsl:stylesheet>