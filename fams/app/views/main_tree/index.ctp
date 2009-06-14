<script>
Ext.onReady(function(){
    // shorthand
    var Tree = Ext.tree;
    
    var tree = new Tree.TreePanel({
        el:'tree-div',
        useArrows:true,
        autoScroll:true,
        animate:true,
        enableDD:true,
        containerScroll: true,

        // auto create TreeLoader
        dataUrl: '/main_tree/tree_view',

        root: {
            nodeType: 'async',
            text: 'FAMS',
            draggable:false,
            id:'source'
        }
    });

    // render the tree
    tree.render();
    tree.getRootNode().expand();
});

</script>

</div>
