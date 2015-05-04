import org.apache.http.client.methods.CloseableHttpResponse;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.client.utils.URIBuilder;
import org.apache.http.impl.client.CloseableHttpClient;
import org.apache.http.impl.client.HttpClients;

import java.net.URI;
import java.util.Arrays;
import java.util.List;

public class User {
    private static final String CLIENT_ID = "7b04cbac79e14d60914656262378f01e";
    private static final String RESPONSE_TYPE = "code";
    private static final List<String> SCOPES = Arrays.asList("", "playlist-read-private", "playlist-modify-public",
            "playlist-modify-private", "streaming", "user-follow-modify", "user-follow-read", "user-library-read",
            "user-library-modify", "user-read-private", "user-read-birthdate", "user-read-email");
    /*
    [0] => If no scope is specified, access is permitted only to publicly available information: that is, only
    information normally visible to normal logged-in users of the Spotify desktop, web, and mobile clients (e.g. public
    playlists).
    [1] => Read access to user's private playlists.
    [2] => Write access to a user's public playlists.
    [3] => Write access to a user's private playlists.
    [4] => Control playback of a Spotify track. This scope is currently only available to Spotify native SDKs
    (for example, the iOS SDK and the Android SDK). The user must have a Spotify Premium account.
    [5] => Write/delete access to the list of artists and other users that the user follows.
    [6] => Read access to the list of artists and other users that the user follows.
    [7] => Read access to a user's "Your Music" library. (NOTE: Although 'Albums' is included in these permissions,
    the relevant endpoint is not yet available)
    [8] => Write/delete access to a user's "Your Music" library. (NOTE: Although 'Albums' is included in these
    permissions, the relevant endpoint is not yet available)
    [9] => Read access to user’s subscription details (type of user account).
    [10] => Read access to the user's birthdate.
    [11] => Read access to user’s email address.
     */

    private boolean authenticated;
    private String redirectUri;
    private String scope;
    private String state;
    private int userId;

    public User() {
        this.authenticated = false;
        this.redirectUri = "http://tunespy.azurewebsites.net"; //"http%3A%2F%2Ftunespy.azurewebsites.net";
        // [1] for now.
        this.scope = SCOPES.get(1);
        // Hard-coded for now.
        this.state = "";

        this.authenticate();
    }

    // Returns true if successful auth, false if not.
    public boolean authenticate() {
        // Based on: https://developer.spotify.com/web-api/authorization-guide/
        // and https://stackoverflow.com/questions/1359689/how-to-send-http-request-in-java
        CloseableHttpResponse response = null;

        try {
            // Create connection
            CloseableHttpClient httpclient = HttpClients.createDefault();
            URI uri = new URIBuilder()
                    .setScheme("https")
                    .setHost("accounts.spotify.com")
                    .setPath("/authorize")
                    .setParameter("client_id", CLIENT_ID)
                    .setParameter("response_type", RESPONSE_TYPE)
                    .setParameter("redirect_uri", this.redirectUri)
                    .setParameter("scope", this.scope)
                    .setParameter("state", this.state)
                    .build();

            HttpGet httpGet = new HttpGet(uri);
            System.out.println(httpGet.getURI());
            response = httpclient.execute(httpGet);
            System.out.println(response.toString());
            response.close();
        } catch (Exception e) {
            e.printStackTrace();
            return false;
        } finally {
        }

        return this.isAuthenticated();
    }

    public int getId() {
        return this.userId;
    }

    public boolean isAuthenticated() {
        return this.authenticated;
    }

    public void setRedirectUri(String redirectUri) {
        this.redirectUri = redirectUri;
    }
}