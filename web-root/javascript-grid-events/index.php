<?php
$key = "Events";
$pageTitle = "ag-Grid Events";
$pageDescription = "Learn how each events impacts ag-Grid.";
$pageKeyboards = "javascript data grid ag-Grid events";
include '../documentation-main/documentation_header.php';
?>

<div>

    <h2>Events</h2>


    <p>
        Below are listed all the events of the grid. Remember you can listen to events in
        the following ways:
    <p>

    <h4>
        <img src="/images/javascript.png" height="20"/>
        <img src="/images/angularjs.png" height="20px"/>
        Javascript and AngularJS 1.x
    </h4>
    <p>
        Add the relevant onXXX() method to the gridOptions or register a method
        via api.addEventListener(eventName, handler).
    </p>

    <h4>
        <img src="/images/react.png" height="20px"/>
        React
    </h4>
    <p>
        Add the relevant onXXX() method to the gridOptions or register a method
        via api.addEventListener(eventName, handler). You can also register events
        using React props in your JSX eg <i>eventName={this.myEventHandler.bind(this)}</i>.
    </p>

    <h4>
        <img src="/images/angular2.png" height="20px"/>
        AngularJS 2
    </h4>
    <p>
        Add the relevant onXXX() method to the gridOptions or register a method
        via api.addEventListener(eventName, handler). You can also register events
        using AngularJS 2 event binding eg <i>(event-name)="myEventHandler"</i>.
    </p>

    <h4>
        <img src="/images/webComponents.png" height="20px"/>
        Web Components
    </h4>
    <p>
        Add the relevant onXXX() method to the gridOptions or register a method
        via api.addEventListener(eventName, handler). You can also register events
        by calling <i>domElement.addEventListener(eventName, handler)</i> or placing
        an onXXX method directly onto the dom element - but remember the latter
        uses lower case event name and handler name to be consistent with how other
        DOM elements work.
    </p>

    <h2>ag-Grid Events</h2>

    <table class="table">
        <tr>
            <th>Event</th>
            <th>Description</th>
        </tr>
        <tr>
            <th>rowSelected</th>
            <td>Row is selected.</td>
        </tr>
        <tr>
            <th>rowDeselected</th>
            <td>Row is de-selected.</td>
        </tr>
        <tr>
            <th>rowClicked</th>
            <td>Row is clicked.</td>
        </tr>
        <tr>
            <th>rowDoubleClicked</th>
            <td>Row is double clicked.</td>
        </tr>
        <tr>
            <th>cellClicked</th>
            <td>Cell is clicked.</td>
        </tr>
        <tr>
            <th>cellDoubleClicked</th>
            <td>Cell is double clicked.</td>
        </tr>
        <tr>
            <th>cellContextMenu</th>
            <td>Cell is right clicked.</td>
        </tr>
        <tr>
            <th>cellFocused</th>
            <td>Cell is focused.</td>
        </tr>
        <tr>
            <th>modelUpdated</th>
            <td>Displayed rows have changed. Happens following sort, filter or tree expand / collapse events.</td>
        </tr>
        <tr>
            <th>sortChanged<br/>beforeSortChanged<br/>afterSortChanged</th>
            <td>
                sortChanged -> Sort has changed, grid also listens for this and updates the model.<br/>
                beforeSortChanged -> Sort has changed, grid has not updated.<br/>
                afterSortChanged -> Sort has changed, grid has updated.<br/>
            </td>
        </tr>
        <tr>
            <th>filterChanged</br>beforeFilterChanged<br/>afterFilterChanged<br/>filterModified</th>
            <td>
                filterChanged -> Filter has changed, grid also listens for this and updates the model.<br/>
                beforeFilterChanged -> Filter has changed, grid has not updated.<br/>
                afterFilterChanged -> Filter has changed, grid has updated.<br/>
                filterModified -> Gets called when filter has been modified, but grid not informed. Useful when
                using an apply button inside the filter.<br/>
            </td>
        </tr>
        <tr>
            <th>gridReady</th>
            <td>ag-Grid has initialised. The name 'ready'
                was influenced by the authors time programming the Commodore 64. Use this event if,
                for example, you need to use the grid's API to fix the columns to size.</td>
        </tr>
        <tr>
            <th>selectionChanged</th>
            <td>Selection is changed. Event contains the selection.</td>
        </tr>
        <tr>
            <th>cellValueChanged</th>
            <td>Value has changed after editing.</td>
        </tr>
        <tr>
            <th>gridSizeChanged</th>
            <td>The grid had to lay out again because it changed size.</td>
        </tr>
        <tr>
            <th>rowGroupOpened</th>
            <td>A row group was opened or closed.</td>
        </tr>
        <tr>
            <th>columnEverythingChanged</th>
            <td>Shotgun - gets called when either a) new columns are set or b) columnApi.setState() is used, so everything has changed.</td>
        </tr>
        <tr>
            <th>columnVisible</th>
            <td>A column, or group of columns, was hidden / shown.</td>
        </tr>
        <tr>
            <th>columnPinned</th>
            <td>A column, or group of columns, was pinned / unpinned.</td>
        </tr>
        <tr>
            <th>columnResized</th>
            <td>A column was resized.</td>
        </tr>
        <tr>
            <th>columnRowGroupChanged</th>
            <td>A row group column was added or removed.</td>
        </tr>
        <tr>
            <th>columnValueChanged</th>
            <td>A value column was added or removed.</td>
        </tr>
        <tr>
            <th>columnMoved</th>
            <td>A column was moved.</td>
        </tr>
        <tr>
            <th>columnGroupOpened</th>
            <td>A column group was opened / closed.</td>
        </tr>
        <tr>
            <th>viewportChanged</th>
            <td>Informs when rows rendered into the DOM changes.</td>
        </tr>

    </table>

    <p>
        <?php include '../enterprise.php';?>
        &nbsp;
        The below events are available in the Enterprise version of ag-Grid.
    </p>

    <table class="table">
        <tr>
            <th>Event</th>
            <th>Description</th>
        </tr>
        <tr>
            <th>rangeSelectionChanged</th>
            <td>A change to range selection has occurred.</td>
        </tr>
    </table>
</div>

<?php include '../documentation-main/documentation_footer.php';?>
