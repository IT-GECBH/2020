<% @LANGUAGE = VBScript %>

<%
' Fig. 25.22 : database.asp
' ASP document for interacting with the database
Option Explicit

Dim connection, loginData

' provide error handling code
On Error Resume Next
Session( "errorString" ) = ""

Set connection = Server.CreateObject( "ADODB.Connection" )
Call connection.Open( "MySqlDB" )
Call errorHandlerLog()
' create the record set]

Set loginData = Server.CreateObject( "ADODB.Recordset" )
Call loginData.Open( Session( "query" ), connection )
Set Session( "loginData" ) = loginData

Call errorHandlerLog()

Sub errorHandlerLog()
If Err.Number <> 0 Then
Dim errorString

errorString = Session( "errorString" )
errorString = errorString & "<p class = " & _
Chr( 34 ) & "error" & Chr ( 34 ) & ">Error (" _
& Err.Number & ") in " & Err.Source & "<br />" & _
Err.Description & "</p><br />"
Session( "errorString" ) = errorString
End If
End Sub
%>