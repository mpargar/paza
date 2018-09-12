export default function Route (str) {
  const matchRoute = (location.pathname === str)
  return {
    use (Instance) {
      if (matchRoute) Instance.init()
    }
  }
}
