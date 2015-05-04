import java.util.HashMap;

public class PlaylistAggregator implements Runnable {
    private User user;
    private String apiUri;
    private HashMap<Integer, String> playlists;

    public PlaylistAggregator(User user) {
        this.user = user;
        this.apiUri = "https://api.spotify.com/v1/users/" + this.user.getId() + "/playlists";
    }

    public void run() {
        // Get user playlists.

    }
}
