import React from "react";
import { HashRouter, Route, Switch } from "react-router-dom";
import "./scss/style.scss";
import useToken from "./services/useToken";

const loading = (
  <div className="pt-3 text-center">
    <div className="sk-spinner sk-spinner-pulse" />
  </div>
);

// Containers
const TheLayout = React.lazy(() => import("./containers/TheLayout"));

// Pages
const Login = React.lazy(() => import("./views/pages/login/Login"));

function App() {
  const { token, setToken } = useToken();

  if (!token) {
    return (
      <React.Suspense fallback={loading}>
        <Login setToken={setToken} />
      </React.Suspense>
    );
  }

  return (
    <HashRouter>
      <React.Suspense fallback={loading}>
        <Switch>
          <Route
            path="/"
            name="Home"
            render={(props) => <TheLayout {...props} />}
          />
        </Switch>
      </React.Suspense>
    </HashRouter>
  );
}

export default App;
