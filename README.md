# uk-regs-parser
I'm frustrated by the complexity of some of the UK building regulations. This project is to develop a suite of tools to:
    1. query a mysql database of UK Building Regulations with the goal of 
    2. providing a front end which will ask the user a set of basic questions about the building and then 
    3. return a filtered form of the regulations specific to his or her building.

    Main Files:
    index.php - Initial page (contains links to principal files and returns full contents of database up to column Data3)
    ClauseReport.php - A database navigator.
    Clauseprint.php - Assembles nearly the full document by first establishing a list of clauses and then using functions to return each clause contents. Something like this method will be used for the ultimate output, by passing an exlude/include list to a function. Also tests the Fdiagramprint function.
    input.php - Basic input forms (incomplete)
    action_page.php - (incomplete) Currently just displays the input values obtained from input.php. Will eventually cross reference the 'rules' file to determine an exlude/include list of clause numbers to display
    Output.CSV.php - Sends a database query to a function and prints the results to a CSV file

    Utilities
    I have written a few basic utilities, mostly to do specific queries of the database:
    Util_testindex.php - Prints a list of db ID keys against Para numbers
    Util_testpara.php - Prints various ID key data for a given Para number (and tests code for an 'input' box)
    Util_testsection.php> - Returns a var_dump of an array that gives ID keys for the start of each section in the document
    Util_NewRow.php - USE WITH CAUTION!!! Adds a new row in the database at the input key number
    Util_info.php - Standard php installation info
    Util_clauselinkreport.php - Unfinished. Currently returns a search of clauses for the term 'paragraph' to help automate the 'rules' file. TODO: write code to parse this file to determine the clause number of each entry against the paragraph numbers that are found.
      
    Functions:
    All functions are prefixed "F".
