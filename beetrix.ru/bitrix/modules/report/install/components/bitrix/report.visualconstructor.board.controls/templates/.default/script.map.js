{"version":3,"sources":["script.js"],"names":["BX","namespace","Report","VisualConstructor","Board","Controls","options","this","addFormSlider","reportCategories","configurationButton","boardId","demoToggle","init","prototype","bind","handlePopupButtonClick","handleConfigurationButtonClick","addCustomEvent","closeSlider","confirmationPopup","PopupWindow","title","noAllPaddings","closeByEsc","autoHide","content","getConfigurationButtonLayout","show","openSlider","SidePanel","Instance","open","cacheable","contentCallback","delegate","getSliderContent","slider","promise","Promise","VC","Core","ajaxGet","urlParams","categories","onFullSuccess","result","getData","set","data","fulfill","contentContainer","getContentContainer","addEventListener","PopupWindowManager","adjustPopupsPositions","animationDuration","width","events","onLoad","event","getSlider","html","get","onClose","closeAllPopups","closeAll","menuPoints","push","create","attrs","className","children","text","getToggleBoardTitle","click","toggleBoard","getDemoModeToggleButtonTitle","toggleDemoMode","message","getDesignerModeToggleButtonTitle","board","BoardRepository","getBoard","getDashboard","isDesignerMode","isDemoMode","abortAllRunningRequests","ajaxPost","boardKey","response","errors","length","clearRows","destroy","rows","addRows","render","close","toggleBoardDesignerMode","toggleDesignerMode"],"mappings":"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","file":"script.map.js"}