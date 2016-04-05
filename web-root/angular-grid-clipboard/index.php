<?php
$key = "Clipboard";
$pageTitle = "Javascript Grid Clipboard";
$pageDescription = "ag-Grid can use the clipboard. This page explains how to interact with the clipboard using ag-Grid.";
$pageKeyboards = "Javascript Grid Clipboard";
include '../documentation-main/documentation_header.php';
?>

<div>

    <h2>Clipboard</h2>

    <p>
        <?php include '../enterprise.php';?>
        &nbsp;
        Clipboard is available in ag-Grid Enterprise.
    </p>

    <p>
        You can copy and paste items to and from the grid using the system clipboard.
    </p>

    <h3>
        Copy to Clipboard
    </h3>

    <p>
        Copy to clipboard operation can be done in the following ways:
        <ul>
            <li>Select 'Copy' from the context menu that appears when you right click over a cell.</li>
            <li>Press keys Ctrl+C while focus is on the grid.</li>
            <li>Use the API methods: copySelectedRowsToClipboard() and copySelectedRangeToClipboard()</li>
        </ul>
    </p>

    <h3>
        Paste from Clipboard
    </h3>

    <p>
        Paste to clipboard can only be done in one way:
        <ul>
            <li>Press keys Ctrl+V while focus in on the grid with a cell selected.</li>
        </ul>
        The paste will then proceed starting at the selected cell if multiple cells are to be pasted.
    </p>

    <note>
        The 'paste' operation in the context menu is not possible and hence always disabled.
        It is not possible because of a browser security restriction that Javascript cannot
        take data from the clipboard without the user explicitly doing a paste command from the browser
        (eg Ctrl+V or from the browser menu). If Javascript could do this, then websites could steal
        data from the client via grabbing from the clipboard maliciously. The reason why ag-Grid keeps
        the paste in the menu as disabled is to indicate to the user that paste is possible and it provides
        the shortcut as a hint to the user. This is also why the API cannot copy from clipboard.
    </note>

    <p>
        The copy operation will copy selected ranges, selected rows, or the currently focused cell, based
        on this order:
        <ul>
            <li>
                1. If range selected (via range selection), copy range.
            </li>
            <li>
                2. Else if rows selected (via row selection), copy rows.
            </li>
            <li>
                3. Else copy focused cell.
            </li>
        </ul>
    </p>

    <note>
        If you copy multiple ranges in range selection (my holding down ctrl), then only the first
        selection will be copied into the clipboard. This was influenced by Excel, where if you try
        to copy multiple ranges, it gives an error message saying multiple ranges cannot be copied.
    </note>

    <h3>Safari Support</h3>

    <p>
        Copy to clipboard is not supported in Safari. This is because the Safari browser does not implement the
        required API that ag-Grid uses, further details are described
        <a href="https://developer.mozilla.org/en-US/docs/Web/API/Document/execCommand">here</a>. ag-Grid does
        not plan to support Safari clipboard as Safari is not generally used in corporate environments where
        the target audience for this feature resides.
    </p>

    <h3>Clipboard Example</h3>

    <p>
        Below you can:
        <ul>
        <li>Copy and Paste with the Context Menu.</li>
        <li>Copy with the provided buttons.</li>
    </ul>
        The example has both row click selection and range selection enabled. You probably won't do
    this in your application as it's confusing, it's done below just to demonstrate them side by side.
    </p>

    <show-example example="exampleClipboard" example-height="450px"></show-example>

</div>

<?php include '../documentation-main/documentation_footer.php';?>
