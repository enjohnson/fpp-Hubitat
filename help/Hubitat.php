<h1>Hubitat for FPP</h1>

<p><strong>NOTE:</strong> This currently uses the Hubitat groovy IDE, which is said to be going away sometime in 2021. When that happens this plugin will need to be updated.
</p>

<h2>How to set up:</h2>
<ol>
    <li>Install SmartApp</li>
        <ol>
            <li>Login to https://graph.api.Hubitat.com/ide/apps</li>
            <li>Click `New SmartApp` and then `From Code`</li>
            <li>Copy and paste the contents of this file into the text box:<br />https://raw.githubusercontent.com/joeharrison714/fpp-Hubitat-app/master/smartapps/fpp-Hubitat/fpp-web-services.src/fpp-web-services.groovy</li>
            <li>Click Save</li>
            <li>Click Publish -> For Me</li>
            <li>Edit the SmartApp</li>
            <li>Under OAuth click "Enable OAuth in Smart App"</li>
            <li>Leave defaults and click update</li>
            <li>Copy the client ID and client Secret for use in the next step</li>
        </ol>
    <li>Setup plugin</li>
        <ol>
            <li>In the plugin configuration, paste the client ID and secret that you copied above.</li>
            <li>Move away from the text box for the value to save</li>
            <li>Click the link that should appear titled "Configure Hubitat Access"</li>
            <li>Login with Hubitat and choose which switches you want FPP to be able to control</li>
            <li>Click Authorize</li>
            <li>After returning to FPP, restart FPPD</li>
            <li>Test control of your devices/routines using the buttons on the plugin configuration page</li>
            <li>The Hubitat commands should now be available in FPP</li>
        </ol>
</ol>
<p><strong>NOTE:</strong> If you want to trigger a scene, you will need to create a virtual switch and then create an automation to trigger the scene. You can then trigger the virtual switch using this plugin.
</p>